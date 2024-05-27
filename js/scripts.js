document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    form.addEventListener('submit', function (e) {
        e.preventDefault();
        const fundCode = document.querySelector('#fund_code').value;
        fetch(`fetch-mf.php?fund_code=${fundCode}`)
            .then(response => response.text())
            .then(data => {
                const resultDiv = document.querySelector('.result');
                resultDiv.innerHTML = data;
            })
            .catch(error => console.error('Error:', error));
    });
});
