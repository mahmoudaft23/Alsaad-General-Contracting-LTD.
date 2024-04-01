document.addEventListener('DOMContentLoaded', () => {
    var cardd;
    // Get all card elements
    const cards = document.querySelectorAll('.projectitem');
    // Get modal box element
    const modalBox = document.getElementById('card-options');
    // Add click event listener to each card
    cards.forEach(card => {
        card.addEventListener('click', event => {
            console.log("Hi, I got pressed :)");
            // Get clicked card element and its position
            const clickedCard = event.currentTarget;
            const cardPosition = clickedCard.getBoundingClientRect();
            var cardID= clickedCard.getAttribute("data-card-id");
            cardd=cardID;
            console.log(cardd);
            // Position the modal box next to the card
            modalBox.style.left = `${cardPosition.left}px`;
            modalBox.style.top = `${cardPosition.top + window.scrollY}px`;

            // Show the modal box
            modalBox.style.display = 'block';
        });
    });

    // Add click event listener to the document object
    document.addEventListener('click', event => {
        // Check if the clicked element is not a card or the modal box
        if (!event.target.closest('.menu1') && !event.target.closest('#card-options')) {
            // Hide the modal box
            modalBox.style.display = 'none';
        }
    });

    // Add click event listener to the "Edit" button
    const editButton = modalBox.querySelector('#edit-card');
    editButton.addEventListener('click', () => {
        // TODO: Perform edit action here
        console.log('Edit button clicked');
        $.ajax({
            url: "server-edit-project.php",
            type: "POST",
            data: { cardId: cardd
            },
            success: function(response) {
                // handle success response
                console.log("Variable set successfully!");
                console.log(cardd);
                console.log("Response from server:", response);
                $('#modal-container').empty();
                $('#modal-container').html(response);
                var mymodal = document.getElementById("modal-edit");
// Trigger the modal
                var myModal = new bootstrap.Modal(mymodal);
                myModal.show();
            },
            error: function(xhr, status, error) {
                // handle error
                console.log("Error setting variable:", error);
            }
        });
        // Get the modal element by ID
    });

    // Add click event listener to the "Delete" button
    const deleteButton = modalBox.querySelector('#delete-card');
    deleteButton.addEventListener('click', () => {
        // TODO: Perform delete action here
        console.log('Delete button clicked');
        if (confirm("Are you sure you want to delete this item?")) {
            // User clicked OK
            $.ajax({
                url: "server-delete-project.php",
                type: "POST",
                data: { cardId: cardd,
                },
                success: function(response) {
                    // handle success response
                    console.log("Variable set successfully!");
                    console.log(cardd);
                    console.log("Response from server:", response);
                    location.reload();
                },
                error: function(xhr, status, error) {
                    // handle error
                    console.log("Error setting variable:", error);
                }
            });
        } else {
            // User clicked Cancel
        }

    });
    // xxxxxxxxxxxxxxxxxxxxxxxxx
    const addButton = document.getElementById('ADD-BTN')
        addButton.addEventListener('click', () => {
            var clickedButton = event.currentTarget;
            var cardID = clickedButton.getAttribute("data-id");
            // TODO: Perform edit action here
            console.log('Add button clicked');
            $.ajax({
                url: "server-add-project.php",
                type: "POST",
                data: {
                    cardId: cardID
                },
                success: function (response) {
                    // handle success response
                    console.log("Variable set successfully!");
                    console.log(cardID);
                    console.log("Response from server:", response);
                    $('#modal-add-container').empty();
                    $('#modal-add-container').html(response);
                    var mymodal = document.getElementById("modal-add");
// Trigger the modal
                    var myModal = new bootstrap.Modal(mymodal);
                    myModal.show();
                },
                error: function (xhr, status, error) {
                    // handle error
                    console.log("Error setting variable:", error);
                }
            });
            // Get the modal element by ID
        });

});

