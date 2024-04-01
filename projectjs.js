document.addEventListener('DOMContentLoaded', () => {
    // Get all card elements
    const cards = document.querySelectorAll('.projectitem');

    // Add click event listener to each card
    cards.forEach(card => {
        card.addEventListener('click', event => {
            console.log("Hi, I got pressed :)");
            // Get clicked card element and its position
            const clickedCard = event.currentTarget;
            var cardID= clickedCard.getAttribute("data-card-id");
            $.ajax({
                url: "server.php",
                type: "POST",
                data: { cardId: cardID },
                success: function(response) {
                    // handle success response
                    console.log("Variable set successfully!");
                    console.log(cardID);
                    console.log("Response from server:", response);
                },
                error: function(xhr, status, error) {
                    // handle error
                    console.log("Error setting variable:", error);
                }
            });
        });
    });


});
