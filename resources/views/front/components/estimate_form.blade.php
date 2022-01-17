<div class="about-box-layout2">
    <h3 class="item-title">Request An Estimate</h3>
    <form action="{{ route('save.estimate.request') }}" method="POST" class="contact-form-box estimate-request-form">
        @csrf
        <div class="row gutters-10">
            <div class="col-md-12 col-12 esitmate_request_block">

                <div class="row estimate_info_box">

                    <div class="col-md-12 col-12 form-group">
                        <select class="select2 estimate_select2" name="property">
                            <option value="">Select Property</option>
                            @foreach(propertyDropdown() as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                        <span class="invalid-feedback" role="alert">
                            @error('property')
                                <strong>{{ $message }}</strong>
                            @enderror
                        </span>
                    </div>

                    <div class="col-md-12 col-12 form-group">
                        <select class="select2 estimate_select2" name="interval">
                            <option value="">Select Interval</option>
                            <option value="1">One Time</option>
                            <option value="2">Weekly</option>
                            <option value="3">Bi Weekly</option>
                        </select>
                        <span class="invalid-feedback" role="alert">
                            @error('interval')
                                <strong>{{ $message }}</strong>
                            @enderror
                        </span>
                    </div>

                    <div class="col-md-12 col-12 form-group">
                        <select class="service_select2 estimate_select2" name="category_id">
                            <option value="">Select Service</option>
                            @foreach(getCategories("active") as $item)
                                <option data-price="{{ $item->price }}" value="{{ $item->id }}" @if($cat->id == $item->id) selected @endif>{{ $item->name }}</option>
                            @endforeach
                        </select>
                        <span class="invalid-feedback" role="alert">
                            @error('property')
                                <strong>{{ $message }}</strong>
                            @enderror
                        </span>
                    </div>

                    <div class="col-md-12 col-12 form-group hours_box">
                        <select class="hours_select2 estimate_select2" name="hours">
                            <option value="">-- Select Hours --</option>
                            @foreach(hoursDropdown() as $item)
                                @if($item < $cat->min_hours )
                                    @continue
                                @endif
                                <option value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                        <span class="invalid-feedback" role="alert">
                            @error('hours')
                                <strong>{{ $message }}</strong>
                            @enderror
                        </span>

                        <input type="hidden" class="category_price" name="price" value="{{ $cat->price }}">
                    </div>

                    <div class="col-md-2 col-2"></div>
                    <div class="col-md-8 col-8 form-group estimate_box text-center">
                        
                    </div>
                    <div class="col-md-2 col-2"></div>

                    <div class="col-12 form-group">
                        <button type="submit" class="fw-btn-fill bg-accent text-primarytext estimate_btn">Next <i class="fas fa-angle-right"></i></button>
                    </div>

                </div>

                <div class="row user_info_box" style="display: none;">

                    <div class="col-md-4 col-4 my-2">
                        <button type="button" class="btn btn-warning esitmate_back_btn btn-block btn-lg"><i class="fa fa-arrow-left"></i> Back</button>
                    </div>
                    <div class="col-md-8 col-8"></div>
                    
                    <div class="col-md-12 col-12 form-group">
                        <input type="text" placeholder="Name" class="form-control" name="name" data-error="Name field is required" required>
                        <span class="invalid-feedback" role="alert">
                            @error('name')
                                <strong>{{ $message }}</strong>
                            @enderror
                        </span>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="col-md-12 col-12 form-group">
                        <input type="text" placeholder="Phone" class="form-control numbers" name="phone" data-error="Phone field is required" required>
                        <span class="invalid-feedback" role="alert">
                            @error('phone')
                                <strong>{{ $message }}</strong>
                            @enderror
                        </span>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="col-12 form-group">
                        <input type="email" placeholder="E-mail Address" class="form-control" name="email" data-error="email field is required" required>
                        <span class="invalid-feedback" role="alert">
                            @error('email')
                                <strong>{{ $message }}</strong>
                            @enderror
                        </span>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="col-12 form-group mg-b-20">
                        <textarea placeholder="Address" class="textarea form-control" name="address" id="form-message" rows="2" cols="20" 
                        data-error="Message field is required" required></textarea>
                        <span class="invalid-feedback" role="alert">
                            @error('address')
                                <strong>{{ $message }}</strong>
                            @enderror
                        </span>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="col-12 form-group mg-b-20">
                        <textarea placeholder="Note ( Optional )" class="textarea form-control" name="note" id="form-message" rows="2" cols="20" 
                        data-error="Note field is required"></textarea>
                        <span class="invalid-feedback" role="alert">
                            @error('note')
                                <strong>{{ $message }}</strong>
                            @enderror
                        </span>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="col-12 form-group">
                        <button type="submit" class="fw-btn-fill bg-accent text-primarytext">Book Now<i class="fas fa-angle-right"></i></button>
                    </div>

                </div>

            </div>

            
        </div>


        <div class="form-response"></div>
        <input type="hidden" name="service_price" class="hidden_service_price" value="">
        <input type="hidden" name="amount" value="" class="hidden_amount">
    </form>
</div>