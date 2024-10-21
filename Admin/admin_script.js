function openForm(formId) {
    document.getElementById(formId).style.display = "block";
}

function closeForm(formId) {
    document.getElementById(formId).style.display = "none";
}

// Function to ban a user (implement according to your requirements)
function banUser(userId) {
    if (confirm("Are you sure you want to ban this user?")) {
        // Implement AJAX request to ban user
        // Example: send a request to a ban user script
        window.location.href = `ban_user.php?id=${userId}`;
    }
}

// Function to view user details (implement according to your requirements)
function viewUserDetails(userId) {
    // Implement AJAX request or redirect to a user detail page
    alert("User ID: " + userId);
}

// Function to update leaderboard (implement according to your requirements)
function updateLeaderboard(id) {
    // Implement AJAX request to update leaderboard
    alert("Update leaderboard for user ID: " + id);
}

// Function to delete leaderboard entry (implement according to your requirements)
function deleteLeaderboard(id) {
    if (confirm("Are you sure you want to delete this leaderboard entry?")) {
        // Implement AJAX request to delete leaderboard entry
        window.location.href = `delete_leaderboard.php?id=${id}`;
    }
}


var ban_user=document.querySelector("#ban_user").addEventListener("click",()=>{
    ban_user.innerHtml="Unban";
})