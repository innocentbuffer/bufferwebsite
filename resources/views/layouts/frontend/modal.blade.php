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
                <form action="/formrequest" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" name="firstname" class="form-control" id="firstname" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last Name" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="firstname">Company Name</label>
                                <input type="text" name="company" class="form-control" id="companyname" placeholder="Company Name" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="lastname">Position in Company</label>
                                <input type="text" name="position" class="form-control" id="position" placeholder="Your Position in Company" required>
                            </div>
                        </div>
                    </div>            
                    <div class="row">
                        <div class="col-6 type-state" id="type-state">
                            <div class="form-group">
                                <label for="solutiontype">Solution Type:</label>
                                <select name="solutiontype" id="solutiontype" class="form-control">
                                    <option selected>Select a Solution</option>
                                    <option value="sms">SMS</option>
                                    <option value="rcs">Rich Communiction Service</option>
                                    <option value="whatsapp">Whatsapp Business Api</option>
                                    <option value="2-way-messaging">2-way Messaging</option>
                                    <option value="number-lookup">Number Lookup</option>
                                    <option value="secure-opt">Secure OTP</option>
                                    <option value="outband-dialer">Outband Dialer</option>
                                    <option value="ivr">Interactive Voice Response</option>
                                    <option value="click-2-call">Click 2 Call</option>
                                    <option value="pay-per-click">Pay per Click</option>
                                    <option value="content-marketing">Content Marketing</option>
                                    <option value="inbound-marketing">Inbound Marketing</option>
                                    <option value="email-marketing">Email Marketing</option>
                                    <option value="premium-ussd">Premium USSD</option>
                                    <option value="direct-billing-service">Direct Billing Service</option>
                                    <option value="wap-billing">Wap Billing</option>
                                </select>
                            </div>
                        </div>
                        <div class="" id="email-state">
                            <div class="form-group">
                                <label for="lastname">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Message</label>
                        <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Write your message" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="qoutetype"  id="qoutetype" value="">
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