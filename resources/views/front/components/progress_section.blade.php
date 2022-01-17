<!-- Progress Area Start Here -->
    <section class="progress-wrap-layout1 section-padding-12">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8 col-12">
                    <div class="progress-box-layout1">
                        <h2 class="item-title">{{ setting('clients_section_main_title') ?? '' }}</h2>
                        <div class="item-content">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="counter-item">
                                        <div class="counter count-number" data-num="{{ setting('clients_section_project_done_total') ?? '' }}">{{ setting('clients_section_project_done_total') ?? '' }}</div>
                                        <div class="count-title">{{ setting('clients_section_project_done_text') ?? '' }}</div>
                                        <div class="bg-icon"><i class="far fa-thumbs-up"></i></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="counter-item">
                                        <div class="counter count-number" data-num="{{ setting('clients_section_happy_client_total') ?? '' }}">{{ setting('clients_section_happy_client_total') ?? '' }}</div>
                                        <div class="count-title">{{ setting('clients_section_happy_client_text') ?? '' }}</div>
                                        <div class="bg-icon"><i class="far fa-smile"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Progress Area End Here -->