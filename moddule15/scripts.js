document.getElementById('addProductBtn').addEventListener('click', function() {
    const form = document.getElementById('addProductForm');
    form.style.display = form.style.display === 'none' ? 'block' : 'none';
});

function editProduct(id) {
    alert('Edit product with ID: ' + id);
}

function deleteProduct(id) {
    if (confirm('Are you sure you want to delete this product?')) {
        window.location.href = 'delete.php?id=' + id;
    }
}


function editProduct(id) {
    window.location.href = 'edit.php?id=' + id;
}
