<div class="col-12">
        <div class="w-full">
            {{-- @if(str_contains(url()->current(),'/dashboard/user/openai/generator/ai_image_generator')) --}}
            @if(count($thenextlegImages) > 0)
                 <h2 class="mb-3">{{__('Result')}}</h2>
            @endif
            <div class="image-results row" id="append-images">
                @foreach($thenextlegImages as $entry)
                    <div class="col-6 col-md-4 col-xl-2 mb-8">
                        <div class="image-result group">
                            <div class="relative aspect-square rounded-lg mb-2 overflow-hidden group-hover:shadow-lg transition-all">
                                <img src="{{$entry->image_path}}" class="w-full h-full aspect-square object-cover object-center" alt="{{$entry->input}}">
                                <div class="flex items-center justify-center gap-2 w-full h-full absolute top-0 left-0 opacity-0 transition-opacity group-hover:!opacity-100">
                                    {{-- <a href="{{$entry->image_path}}" class="btn items-center justify-center w-9 h-9 p-0" download>
                                        <svg width="8" height="11" viewBox="0 0 8 11" fill="var(--lqd-heading-color)" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.57422 0.5V8.75781L6.67969 6.67969L7.5 7.5L4 11L0.5 7.5L1.32031 6.67969L3.42578 8.75781V0.5H4.57422Z"/>
                                        </svg>
                                    </a>--}}
                                    <a data-fslightbox="gallery" href="{{$entry->image_path}}" class="btn lb items-center justify-center w-9 h-9 p-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path>
                                        </svg>
                                    </a> 
                                    <a href="{{ LaravelLocalization::localizeUrl(route('dashboard.user.thenextleg.image.delete', ['id' => $entry->id])) }}" onclick="return confirm('Are you sure?')" class="btn items-center justify-center w-9 h-9 p-0">
                                        <svg width="10" height="9" viewBox="0 0 10 9" fill="var(--lqd-heading-color)" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.08789 1.49609L5.80664 4.75L9.08789 8.00391L8.26758 8.82422L4.98633 5.57031L1.73242 8.82422L0.912109 8.00391L4.16602 4.75L0.912109 1.49609L1.73242 0.675781L4.98633 3.92969L8.26758 0.675781L9.08789 1.49609Z"/>
                                        </svg>
                                    </a>
                                </div>
                                
                            </div>
                            <p class="w-full overflow-ellipsis whitespace-nowrap text-heading mb-1 overflow-hidden" title="{{$entry->input}}">{{$entry->input}}</p>
                            <p class="mb-0 text-muted d-grid gap-2 col-7 mx-auto">{{$entry->created_at->diffForHumans()}}</p>
                            <div class="btn-group mt-3 mb-3 " role="group"><a href="{{route('dashboard.user.thenextleg.generator', 'ai_image_generator')}}">
                                <button class="btn btn-light btn-default upscale" data-id= "{{$entry->butonData->button_id}}" data-index = "{{$entry->image_index}}" autofocus="autofocus" id= "openai_generator_button" style="background-color: #F2F2F4;color:black;text-align:center" onclick="upscaleImages()" >
                                   Upscale
                                </button>
                            </a></div>
                            <div class="btn-group mt-3 mb-3 " role="group"><a href="{{route('dashboard.user.thenextleg.generator', 'ai_image_generator')}}">
                                <button class="btn btn-light btn-default variation" data-id= "{{$entry->butonData->button_id}}" data-index = "{{$entry->image_index}}" autofocus="autofocus" id= "openai_generator_button" style="background-color: #F2F2F4;color:black;text-align:center" onclick="variationImages()" >
                                   Variation
                                </button>
                            </a></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
