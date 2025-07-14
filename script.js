
document.getElementById('peopleTable').addEventListener('click', async function(e) {

    if (!e.target.classList.contains('toggleBtn')) return;

    
    const id = e.target.getAttribute('data-id');
    

    const res = await fetch('toggle.php', {
        method: 'POST',
        body: new URLSearchParams({ id })
    });
    
    
    const newStatus = await res.text();
    
    const row = e.target.closest('tr');
    row.querySelector('.status').innerText = newStatus;
});