<div id="modal-add" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content back1-1">
            <form action="edit-staff-form.php" method="post" id="add-form">
                <div class="model-header column-gap-0 position-relative">


                    <button class="btn-close  btn-close-white position-absolute px-4 py-3" style="top: 0; right:0; " data-bs-dismiss="modal" data-bs-target="#pfpinfo"></button>
                    <h4 class="px-4 py-3" style="color: white;">Add Staff</h4>
                    <hr style="color: white;">
                </div>
                <div class="modal-body px-3">
                    <div class="despli1-1">
                        <div >
                            <label for="Staff_ID" style="color: white;">Staff ID:</label><br>
                            <input class="in1-1" type="text" id="Staff_ID" name="Staff_ID" style="color: white;" >
                        </div>
                        <div  style="margin-left: 40px;">
                            <label for="Staff_Name" style="color: white;">Name:</label><br>
                            <input class="in1-1" type="text" id="Staff_Name" name="Staff_Name" style="color: white;">
                        </div>
                    </div>
                    <div style="width: 100%; display: flex; justify-content: center;">
                        <hr style="color: black; max-width: 300px;">
                    </div>
                    <div style="margin-left: 65px; margin-right: 60px;" class="despli1-2">

                        <label for="Staff_Engineer_ID" style="color: white;">Engineer ID:</label><br>
                        <input class="in1-2" type="text" id="Staff_Engineer_ID" name="Staff_Engineer_ID" style="width: 100%; color: white;">

                    </div>
                    <div style="margin-left: 65px; margin-right: 60px; margin-top: 30px;" class="despli1-2">

                        <label for="Location" style="color: white; ">Location:</label><br>
                        <input class="in1-2" type="text" id="Location" name="Location" style="width: 100%; color: white;" >

                    </div>

                    <br>


                </div>
                <div class="modal-footer justify-content-center d1-1">
                    <div style="color: white;"> Al-Saad Company</div>

                    <div style="margin-left: 100px;">
                        <button class=" button1" data-bs-dismiss="modal" data-bs-target="#pfpinfo">Cancel</button>
                        <button class="button2" type="submit" id="submit-btn2">Add</button>
                    </div>

                    <hr>
                </div>
                <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
            </form>
        </div>
    </div>
</div>


<script>
    // Get the form and submit button elements
    const form = document.querySelector('#add-form');
    const submitBtn = document.querySelector('#submit-btn2');

    // Add an event listener to the form's submit event
    form.addEventListener('submit', (event) => {
        // Prevent the default form submission
        event.preventDefault();

        // Close the modal
        const modal = document.querySelector('#modal-add');
        const modalInstance = bootstrap.Modal.getInstance(modal);
        modalInstance.hide();

        // Send the form data using AJAX
        const formData = new FormData(form);
        const xhr = new XMLHttpRequest();
        // xhr.open('POST', form.action);
        // xhr.send(formData);
        xhr.open("POST", "add-staff-form.php");
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