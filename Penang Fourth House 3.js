const housePlanView = document.getElementById('house-plan-view');
const largerImageContainer = document.getElementById('larger-image-container');  

housePlanView.addEventListener('click', () => {
    housePlanView.style.display = 'none';
    largerImageContainer.style.display = 'flex'; 
});

largerImageContainer.addEventListener('click', (event) => {
    if (event.target === largerImageContainer || event.target.className === 'larger-house-plan-view') {
        housePlanView.style.display = 'block'; 
        largerImageContainer.style.display = 'none';
    }
});