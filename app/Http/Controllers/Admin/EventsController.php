<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyEventRequest;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;


class EventsController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Event::query()->select(sprintf('%s.*', (new Event)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'event_show';
                $editGate      = 'event_edit';
                $deleteGate    = 'event_delete';
                $crudRoutePart = 'events';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : "";
            });
            $table->editColumn('location_name', function ($row) {
                return $row->location_name ? $row->location_name : "";
            });
            $table->editColumn('address', function ($row) {
                return $row->address ? $row->address : "";
            });
            $table->editColumn('city', function ($row) {
                return $row->city ? Event::CITY_SELECT[$row->city] : '';
            });

            $table->editColumn('price', function ($row) {
                return $row->price ? $row->price : "";
            });
            $table->editColumn('slug', function ($row) {
                return $row->slug ? $row->slug : "";
            });
            $table->editColumn('event_cover', function ($row) {
                if ($photo = $row->event_cover) {
                    return sprintf(
                        '<a href="%s" target="_blank"><img src="%s" width="50px" height="50px"></a>',
                        $photo->url,
                        $photo->thumbnail
                    );
                }

                return '';
            });
            $table->editColumn('video_link', function ($row) {
                return $row->video_link ? $row->video_link : "";
            });
            $table->editColumn('event_image', function ($row) {
                if (!$row->event_image) {
                    return '';
                }

                $links = [];

                foreach ($row->event_image as $media) {
                    $links[] = '<a href="' . $media->getUrl() . '" target="_blank"><img src="' . $media->getUrl('thumb') . '" width="50px" height="50px"></a>';
                }

                return implode(' ', $links);
            });

            $table->rawColumns(['actions', 'placeholder', 'event_cover', 'event_image']);

            return $table->make(true);
        }

        return view('admin.events.index');
    }

    public function create()
    {
        abort_if(Gate::denies('event_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.events.create');
    }

    public function store(StoreEventRequest $request)
    {
        $event = Event::create($request->all());

        if ($request->input('event_cover', false)) {
            $event->addMedia(storage_path('tmp/uploads/' . $request->input('event_cover')))->toMediaCollection('event_cover');
        }

        foreach ($request->input('event_image', []) as $file) {
            $event->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('event_image');
        }

        return redirect()->route('admin.events.index');
    }

    public function edit(Event $event)
    {
        abort_if(Gate::denies('event_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.events.edit', compact('event'));
    }

    public function update(UpdateEventRequest $request, Event $event)
    {
        $event->update($request->all());

        if ($request->input('event_cover', false)) {
            if (!$event->event_cover || $request->input('event_cover') !== $event->event_cover->file_name) {
                $event->addMedia(storage_path('tmp/uploads/' . $request->input('event_cover')))->toMediaCollection('event_cover');
            }
        } elseif ($event->event_cover) {
            $event->event_cover->delete();
        }

        if (count($event->event_image) > 0) {
            foreach ($event->event_image as $media) {
                if (!in_array($media->file_name, $request->input('event_image', []))) {
                    $media->delete();
                }
            }
        }

        $media = $event->event_image->pluck('file_name')->toArray();

        foreach ($request->input('event_image', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $event->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('event_image');
            }
        }

        return redirect()->route('admin.events.index');
    }

    public function show(Event $event)
    {
        abort_if(Gate::denies('event_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.events.show', compact('event'));
    }

    public function destroy(Event $event)
    {
        abort_if(Gate::denies('event_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $event->delete();

        return back();
    }

    public function massDestroy(MassDestroyEventRequest $request)
    {
        Event::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
