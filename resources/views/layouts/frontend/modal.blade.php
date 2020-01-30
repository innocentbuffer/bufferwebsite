<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" name="firstname" class="form-control" id="firstname" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last Name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="firstname">Company Name</label>
                                <input type="text" name="companyname" class="form-control" id="companyname" placeholder="Company Name">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="lastname">Position in Company</label>
                                <input type="text" name="position" class="form-control" id="position" placeholder="Your Position in Company">
                            </div>
                        </div>
                    </div>            
                    <div class="form-group">
                        <label for="lastname">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Message</label>
                        <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Write your message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="qoute"  id="qoutetype" value="">
                        <button type="submit" class="btn comp-background text-white">Send</button>
                    </div>
                </form>
            </div>

        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

        </div>
    </div>
</div>