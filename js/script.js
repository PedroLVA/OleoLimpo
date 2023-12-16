const addressForm = document.querySelector("#address-form");
const cepInput = document.querySelector("#cep");
const addressInput = document.querySelector("#address");
const cityInput = document.querySelector("#city");
const numberInput = document.querySelector("#number");
const neighborhoodInput = document.querySelector("#neighborhood");
const regionInput = document.querySelector("#region");
const formInputs = document.querySelectorAll("[data-input]");

//Event listener pra não deixar o usuario colocar nada além de numeros
cepInput.addEventListener("keypress", (e) => {
    const onlyNumbers = /[0-9]|\./;
    const key = String.fromCharCode(e.keyCode);
    if (!onlyNumbers.test(key)) {
        e.preventDefault();
        return;
    }
});

numberInput.addEventListener("keypress", (e) => {
    const onlyNumbers = /[0-9]|\./;
    const key = String.fromCharCode(e.keyCode);
    if (!onlyNumbers.test(key)) {
        e.preventDefault();
        return;
    }
});


//checar se o cep está com o tamanho certo (8 digitos)
cepInput.addEventListener("keyup", (e) => {
    const inputValue = e.target.value;

    if (inputValue.length === 8) {
        getAddress(inputValue);
    }
});



const getAddress = async (cep) => {
    cepInput.blur();

    const apiUrl = `https://viacep.com.br/ws/${cep}/json/`;

    try {
        const response = await fetch(apiUrl);

        if (!response.ok) {
            throw new Error("CEP not found");
        }

        const data = await response.json();

        if (data.erro) {
            // Invalid CEP
            addressForm.reset();

            if (!addressInput.hasAttribute("disabled")) {
                toggleDisabled();
            }

            // Show a simple alert
            alert("CEP inválido. Por favor, insira um CEP válido.");

            return;
        }

        if (addressInput.value === "") {
            toggleDisabled();
        }

        addressInput.value = data.logradouro;
        cityInput.value = data.localidade;
        neighborhoodInput.value = data.bairro;
        regionInput.value = data.uf;
    } catch (error) {
        // Handle fetch errors
        console.error("Error fetching CEP:", error);

        // Show a simple alert for fetch errors
        alert("Ocorreu um erro ao buscar o CEP. Por favor, tente novamente.");
    }
}


const toggleDisabled = () => {
    if (regionInput.hasAttribute("disabled")) {
      formInputs.forEach((input) => {
        input.removeAttribute("disabled");
      });
    } else {
      formInputs.forEach((input) => {
        input.setAttribute("disabled", "disabled");
      });
    }
  };
