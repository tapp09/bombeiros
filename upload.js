document.addEventListener('DOMContentLoaded', function() {
    const fileInput = document.getElementById('fileInput');
    const uploadButton = document.getElementById('uploadButton');
    const clearButton = document.getElementById('clearButton');
    const preview = document.getElementById('preview');

    let selectedFiles = [];

    fileInput.addEventListener('change', function() {
        selectedFiles = Array.from(fileInput.files);

        preview.innerHTML = ''; // Limpa a prévia

        selectedFiles.forEach(function(file) {
            const reader = new FileReader();

            reader.onload = function(event) {
                const img = document.createElement('img');
                img.src = event.target.result;
                img.style.maxWidth = '100%';
                preview.appendChild(img);
            };

            reader.readAsDataURL(file);
        });
    });

    uploadButton.addEventListener('click', function() {
        if (selectedFiles.length > 0) {
            // Aqui você pode enviar os arquivos para o seu servidor como mostrado anteriormente.
        } else {
            alert('Selecione pelo menos uma imagem para fazer o upload.');
        }
    });

    clearButton.addEventListener('click', function() {
        fileInput.value = null; // Limpa o valor do campo de entrada de arquivo
        selectedFiles = []; // Reseta a lista de arquivos selecionados
        preview.innerHTML = ''; // Limpa a prévia
    });
});
