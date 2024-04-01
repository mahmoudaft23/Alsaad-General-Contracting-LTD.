<div id="modal-edit" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content back1-1">
            <form action="edit-client-form.php" method="post" id="edit-form">
            <div class="model-header column-gap-0 position-relative">


                <button class="btn-close  btn-close-white position-absolute px-4 py-3" style="top: 0; right:0; " data-bs-dismiss="modal" data-bs-target="#pfpinfo"></button>
                <h4 class="px-4 py-3" style="color: white;">Edit clients</h4>
                <hr style="color: white;">
            </div>
            <div class="modal-body px-3">

                    <div class="despli1-1">
                        <div >
                            <label for="ClientID" style="color: white;">ClientID:</label><br>
                            <input class="in1-1" type="text" id="ClientID" name="ClientID" style="color: white;"value="<?php echo $_SESSION["selected_card_id"] ?>">
                        </div>
                        <div  style="margin-left: 40px;">
                            <label for="Name" style="color: white;">Name:</label><br>
                            <input class="in1-1" type="text" id="Name" name="Name" style="color: white;"value="<?php echo $_SESSION["selected_card_name"] ?>">
                        </div>
                    </div>
                    <div style="width: 100%; display: flex; justify-content: center;">
                        <hr style="color: black; max-width: 300px;">
                    </div>
                    <div style="margin-left: 65px; margin-right: 60px;" class="despli1-2">

                        <label for="Email" style="color: white;">Email:</label><br>
                        <input class="in1-2" type="text" id="Email" name="Email" style="width: 100%; color: white;"value="<?php echo $_SESSION["email"] ?>" >

                    </div>
                    <div class="despli1-1" style="margin-top: 30px;">
                        <div >
                            <label for="EngineerID" style="color: white;">EngineerID:</label><br>
                            <input class="in1-1" type="text" id="EngineerID" name="EngineerID" style="color: white;"value="<?php echo $_SESSION["engineer_id"] ?>">
                        </div>
                        <div  style="margin-left: 40px;">
                            <label for="Stat" style="color: white;">Stat:</label><br>
                            <input class="in1-1" type="text" id="Stat" name="Stat" style="color: white;"value="<?php echo $_SESSION["stat"] ?>">
                        </div>
                    </div>
                    <div style="margin-left: 65px; margin-right: 60px; margin-top: 30px;" class="despli1-2">

                        <label for="Password" style="color: white; ">Password:</label><br>
                        <input class="in1-2" type="text" id="Password" name="Password" style="width: 100%; color: white;" value="<?php echo $_SESSION["password"] ?>">

                    </div>


                    <br>


            </div>
            <div class="modal-footer justify-content-center d1-1">
                <div style="color: white;"> Al-Saad Company</div>

                <div style="margin-left: 100px;">
                    <button class=" button1" data-bs-dismiss="modal" data-bs-target="#pfpinfo">Cancel</button>
                    <button class="button2" id="submit-btn" type="submit">Add</button>
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
        xhr.open("POST", "edit-client-form.php");
        xhr.onload = function() {
            if (xhr.status === 200) {
                console.log('Update successful');
                location.reload(); // reload the page after the update is done
            }
        };
        xhr.send(formData);
    });
</script>



<!--<div id="card-options" style="display: none;-->
<!--  position: absolute;-->
<!--  top: 0;-->
<!--  left: 0;-->
<!--  z-index: 999;-->
<!--border-radius: 50px;" >-->
<!--  <div class="row row-cols-1 pedit1-1" style=" width: 200px;">-->
<!--    <div class="column text-center" >-->
<!--      <button id="edit-card" class="w-100 button1-2">Edit</button>-->
<!--    </div>-->
<!--    <div class="column text-center" >-->
<!--      <button id="delete-card" class="w-100 button1-2">Delete</button>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->