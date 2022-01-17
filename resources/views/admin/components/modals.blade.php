<!-- Modal For Read More -->
<div class="modal fade" id="readMoreModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <p id="contactMessage"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
             </div>
        </div>
    </div>
</div>


<div class="modal fade" id="activateRequestModal" role="dialog">
    <div class="modal-dialog">
    
        <!-- Modal content-->
        <form method="GET" action="" class="activate_request_form">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="font-weight-bold">Activate Request</h4>
                </div>
                <div class="modal-body">
                    
                        <div class="form-group">
                            <label for="final_amount">Final Amount</label>
                            <input type="text" id="final_amount" name="final_amount" class="form-control final_data_amount numbers" placeholder="Final Amount" required>
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary ml-2">Activate</button>
                 </div>
            </div>
        </form>
    </div>
</div>