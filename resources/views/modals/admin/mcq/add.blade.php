<!-- Add Question Modal -->
<div class="modal fade" id="add_mcq_modal" role="dialog">
    <div class="modal-dialog modal-md">
    <!-- Modal content-->
        <form class="add-mcq-modal-form" method="POST" action="{{ route('admin.mcq.save') }}">
            @csrf
            <input type="hidden" class="modal_step" value="1" >
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="font-weight-bold product_modal_title">Add MCQ</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="modal_question_section">
                                        <div class="form-group">
                                            <label for="question">Enter Question</label>
                                            <textarea rows="5" id="question" type="text" name="question" class="form-control" value="" placeholder="Enter Question"></textarea>
                                            <div class="invalid-feedback">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_options_section">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="button" class="btn btn-warning btn-sm options_back_btn mb-4"><i class="fa fa-arrow-left"></i></button>
                                                <div class="">
                                                    <label>Add Multiple Options</label>
                                                </div>
                                                <div class="options_block">
                                                    <div class="row" id="option-row-1">
                        
                                                        <div class="col-md-10">
                                                            <div class="form-group">
                                                                <input type="text" name="option[0]" class="form-control option_input" value="" placeholder="Enter Option" required />
                                                                <div class="invalid-feedback">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 delete_btn_margin">
                                                            <div>
                                                                <button type="button" title="Remove option" class="btn btn-danger btn-sm pull-right remove_option_trash_btn d-none">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="add-option-btn">
                                                    <button type="button" title="Add option" class="btn btn-primary btn-sm pull-right add_option_plus_btn mt-4">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_correct_option_section">
                                        <button type="button" class="btn btn-warning btn-sm correct_option_back_btn mb-4"><i class="fa fa-arrow-left"></i></button>
                                        <div class="form-group">
                                            <label for="correct_option">Select Correct Option</label>
                                            <select id="correct_option" class="select2 option_dropdown" name="correct_option">
                                                
                                            </select>
                                            <div class="invalid-feedback">
                                                
                                            </div>
                                            <input type="text" class="correct_option_input" name="correct_option_input" value="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="modal-footer mt-3">
                    <button type="submit" class="btn btn-success mr-1 next_button_question_modal">Next</button>
                    <button type="button" class="btn btn-danger close_modal_button" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>