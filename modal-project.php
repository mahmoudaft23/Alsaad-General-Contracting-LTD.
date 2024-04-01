<div id="modal-edit" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content back1-1">
            <form action="edit-project-form.php" method="post" id="edit-form">
            <div class="model-header column-gap-0 position-relative">


                <button class="btn-close  btn-close-white position-absolute px-4 py-3" style="top: 0; right:0; " data-bs-dismiss="modal" data-bs-target="#pfpinfo"></button>
                <h4 class="px-4 py-3" style="color: white;">Add Projects</h4>
                <hr style="color: white;">
            </div>
            <div class="modal-body px-3">

                    <div class="despli1-1">
                        <div >
                            <label for="ProjectID" style="color: white;">ProjectID:</label><br>
                            <input class="in1-1" type="text" id="ProjectID" name="ProjectID" style="color: white;"value="<?php echo $_SESSION["selected_card_id"] ?>">
                        </div>
                        <div  style="margin-left: 40px;">
                            <label for="ProjectName" style="color: white;">ProjectName:</label><br>
                            <input class="in1-1" type="text" id="ProjectName" name="ProjectName" style="color: white;"value="<?php echo $_SESSION["projectnm"] ?>">
                        </div>
                    </div>
                    <div style="width: 100%; display: flex; justify-content: center;">
                        <hr style="color: black; max-width: 300px;">
                    </div>
                    <div style="margin-left: 65px; margin-right: 60px;" class="despli1-2">

                        <label for="Description" style="color: white;">Description:</label><br>
                        <input class="in1-2" type="text" id="Description" name="Description" style="width: 100%;color: white;"value="<?php echo $_SESSION["description"] ?>">

                    </div>
                    <div class="despli1-1" style=" margin-top: 30px;">
                        <div >
                            <label for="Start_Date" style="color: white;">Start_Date</label><br>
                            <input class="in1-1" type="date" id="Start_Date" name="Start_Date" style="color: white;"value="<?php echo $_SESSION["sdate"] ?>">
                        </div>
                        <div  style="margin-left: 40px;">
                            <label for="PEnd_Date" style="color: white;">PEnd_Date:</label><br>
                            <input class="in1-1" type="date" id="PEnd_Date" name="PEnd_Date" style="color: white;"value="<?php echo $_SESSION["edate"] ?>">
                        </div>
                    </div>

                    <div style="margin-left: 65px; margin-right: 60px; margin-top: 30px;" class="despli1-2">

                        <label for="EngineerID" style="color: white;">EngineerID:</label><br>
                        <input class="in1-2" type="text" id="EngineerID" name="EngineerID" style="width: 100%; color: white;"value="<?php echo $_SESSION["eid"] ?>">

                    </div>
                    <div class="despli1-1"  style=" margin-top: 30px;">
                        <div >
                            <label for="Client_D" style="color: white;">Client_D:</label><br>
                            <input class="in1-1" type="text" id="Client_D" name="Client_D" style="color: white;"value="<?php echo $_SESSION["cid"] ?>">
                        </div>
                        <div  style="margin-left: 40px;">
                            <label for="Location" style="color: white;">Location:</label><br>
                            <input class="in1-1" type="text" id="Location" name="Location" style="color: white;"value="<?php echo $_SESSION["location"] ?>">
                        </div>
                    </div>

                    <div style="margin-left: 65px; margin-right: 60px; margin-top: 30px;" class="despli1-2">

                        <label for="Scope" style="color: white;">Scope:</label><br>
                        <input class="in1-2" type="text" id="Scope" name="Scope" style="width: 100%; color: white;"value="<?php echo $_SESSION["scope"] ?>">

                    </div>
                    <div class="despli1-1" style=" margin-top: 30px;">
                        <div >
                            <label for="PlotArea" style="color: white;">PlotArea:</label><br>
                            <input class="in1-1" type="text" id="PlotArea" name="PlotArea" style="color: white;"value="<?php echo $_SESSION["parea"] ?>">
                        </div>
                        <div  style="margin-left: 40px;">
                            <label for="Built-Up_Area" style="color: white;">Built-Up_Area:</label><br>
                            <input class="in1-1" type="text" id="Built-Up_Area" name="Built-Up_Area" style="color: white;"value="<?php echo $_SESSION["barea"] ?>">
                        </div>
                    </div>
                    <br>

            </div>
            <div class="modal-footer justify-content-center d1-1">
                <div style="color: white;"> Al-Saad Company</div>

                <div style="margin-left: 100px;">
                    <button class=" button1" data-bs-dismiss="modal" data-bs-target="#pfpinfo">Cancel</button>
                    <button class="button2" id="submit-btn"type="submit">Add</button>
                </div>

                <hr>
            </div>
            </form>
            <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
        </div>
    </div>
</div>
<script>
    // Get the form and submit button elements
    const form = document.querySelector('#edit-form');
    const submitBtn = document.querySelector('#submit-btn');

    // Add an event listener to the form's submit event
    form.addEventListener('submit', (event) => {
        // Prevent the default form submission
        event.preventDefault();

        // Close the modal
        const modal = document.querySelector('#modal-edit');
        const modalInstance = bootstrap.Modal.getInstance(modal);
        modalInstance.hide();

        // Send the form data using AJAX
        const formData = new FormData(form);
        const xhr = new XMLHttpRequest();
        // xhr.open('POST', form.action);
        // xhr.send(formData);
        xhr.open("POST", "edit-project-form.php");
        xhr.onload = function() {
            if (xhr.status === 200) {
                console.log('Update successful');
                location.reload(); // reload the page after the update is done
            }
        };
        xhr.send(formData);
    });
</script>
