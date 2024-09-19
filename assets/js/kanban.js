const cards = document.querySelectorAll('.kanban-card');
const columns = document.querySelectorAll('.kanban-cards');
// Função para adicionar os eventos de drag nos cards
cards.forEach(card => {
    card.addEventListener('dragstart', dragStart);
    card.addEventListener('dragend', dragEnd);
});
function dragStart(event) {
    event.dataTransfer.setData('text', event.target.dataset.id);
    setTimeout(() => event.target.classList.add('hide'), 0);
}
function dragEnd(event) {
    event.target.classList.remove('hide');
}
// Funções para os eventos de drag nas colunas
columns.forEach(column => {
    column.addEventListener('dragover', dragOver);
    column.addEventListener('dragenter', dragEnter);
    column.addEventListener('dragleave', dragLeave);
    column.addEventListener('drop', dragDrop);
});
function dragOver(event) {
    event.preventDefault();
}
function dragEnter(event) {
    event.preventDefault();
    event.target.classList.add('hovered');
}
function dragLeave(event) {
    event.target.classList.remove('hovered');
}
function dragDrop(event) {
    const cardId = event.dataTransfer.getData('text');
    const card = document.querySelector(`[data-id='${cardId}']`);
    event.target.classList.remove('hovered');
    event.target.appendChild(card);
    // Atualizar o status no banco de dados
    const newStatus = event.target.id;
    updateStatus(cardId, newStatus);
}
function updateStatus(cardId, newStatus) {
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'update_status.php', true);
    xhr.setRequestHeader('Content-Type',
        'application/x-www-form-urlencoded');
    xhr.onload = function () {
        if (xhr.status === 200) {
            console.log('Status atualizado');
        }
    };
    xhr.send(`id=${cardId}&status=${newStatus}`);
}
