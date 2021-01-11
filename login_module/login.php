
<div class="section-container" id="contact-section-container">
    <div class="container contact-form-container">
        <div class="row">
            <div class="col-xs-12 col-md-offset-2 col-md-8" style="background-color: black;">
                <div class="section-container-spacer">
                    <h2 class="text-center" style="color: aliceblue;">Get in touch</h2>
                </div>
                <form action="subscription_details_backend.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="text_details" rows="3" placeholder="Enter your message"></textarea>
                    </div>

                    <div class="form-group">
                        <label class="checkbox-inline">
                            <input type="checkbox" name="inlineCheckbox1" id="inlineCheckbox1" value="1">Email me a copy
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="inlineCheckbox2" id="inlineCheckbox2" value="2">I am not a robot
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary">Send message</button>
                    <a href="" class="btn btn-default">Reset</a>
                </form>
            </div>
        </div>
    </div>
</div>
