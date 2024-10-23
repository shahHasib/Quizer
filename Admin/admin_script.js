function openForm(formId) {
    document.getElementById(formId).style.display = "block";
}

function closeForm(formId) {
    document.getElementById(formId).style.display = "none";
}


function deleteUser(userId) {
    if (confirm("Are you sure you want to Delete this user?")) {
        
        window.location.href = `delete_user.php?id=${userId}`;
    }
}

function deleteLeaderboard(id) {
    if (confirm("Are you sure you want to delete this leaderboard entry?")) {
        // Implement AJAX request to delete leaderboard entry
        window.location.href = `delete_leaderboard.php?id=${id}`;
    }
}
