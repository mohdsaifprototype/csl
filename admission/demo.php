<h5 class="text-center mb-4">Online Admission Form</h5>
                    <form action="onlineAdmissionDB.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="admName" id="" placeholder="Full Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="admFather" id="" placeholder="Father's Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="admPhone" maxlength="10" minlength="10" id="" placeholder="Mobile" required>
                        </div>
                       
                        <div class="form-group">
                            <input type="email" class="form-control" name="admEmail" id="" placeholder="Email" required>
                        </div>
                        <button type="submit" class="btn bg-header">Submit</button>
</form>