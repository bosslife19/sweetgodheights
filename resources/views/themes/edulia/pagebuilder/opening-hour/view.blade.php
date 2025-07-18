<section class="section_padding_bottom index noticeboard">
    <div class="row">
        <div class="col-md-10 offset-md-2">
            <div class="section_title">
                <h2>Our School Hours</h2>
                {{-- <p>{!! pagesetting('opening_hour_description') !!}</p> --}}
            </div>
            <div class="noticeboard_inner">
                @if (!empty(pagesetting('opening_hour_items')))
                    {{-- @foreach (pagesetting('opening_hour_items') as $item)
                        <ul class='noticeboard_inner_weekinfo'>
                            <li><span>{{ $item['opening_hour_item_day'] }}<label>:</label></span>
                                <span>{{ $item['opening_hour_start'] }} {{gv($item, 'opening_hour_end') ? '- '.gv($item, 'opening_hour_end') : ''}}</span>
                            </li>
                        </ul>
                    @endforeach --}}
                    <ul class='noticeboard_inner_weekinfo'>
                            <li><span>Monday<label>:</label></span>
                                <span>7:30 AM  - 4:00PM</span>
                            </li>
                            <li><span>Tuesday<label>:</label></span>
                                <span>7:30 AM  - 4:00PM</span>
                            </li>
                            <li><span>Wednesday<label>:</label></span>
                                <span>7:30 AM  - 4:00PM</span>
                            </li>
                            <li><span>Thursday<label>:</label></span>
                                <span>7:30 AM  - 4:00PM</span>
                            </li>
                            <li><span>Friday<label>:</label></span>
                                <span>7:30 AM  - 2:00PM</span>
                            </li>
                            <li><span>Saturday<label>:</label></span>
                                <span>Closed</span>
                            </li>
                            <li><span>Sunday<label>:</label></span>
                                <span>Closed</span>
                            </li>
                        </ul>
                @endif
            </div>
        </div>
    </div>
</section>
