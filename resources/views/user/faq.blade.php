<div class="faq">
    <div class="container">
        <div class="section_header">
            <div class="faq_header_head section_head">FAQ</div>
            <div class="section_header_cont">
                <div class="faq_header_title">{{__('language.CommonlyAskedQuestions')}}</div>
            </div>
        </div>
        <div class="faq_content">
            <ul class="acordion">
                <?php
                $faq = new \App\Models\Faq();
                $data = $faq->getFaqData();

                ?>
                @foreach($data as $faq)

                    <li class="acordion_card">
                        <button class="acordion_card_title">{{$faq->question}}</button>
                        <div class="acordion_card_text">
                            <p>
                                {!! $faq->answer !!}
                            </p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
