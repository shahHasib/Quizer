// Fetch leaderboard data from server or local storage
const leaderboard = [
    { rank: 1, name: "Alice", score: 100 },
    { rank: 2, name: "Bob", score: 90 },
    { rank: 3, name: "Charlie", score: 80 }
    // Add more entries as needed
];

const tbody = document.querySelector("#leaderboard tbody");
leaderboard.forEach(entry => {
    const row = document.createElement("tr");
    row.innerHTML = `
        <td>${entry.rank}</td>
        <td>${entry.name}</td>
        <td>${entry.score}</td>
    `;
    tbody.appendChild(row);
});
