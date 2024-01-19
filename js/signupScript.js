
const addressForm = document.querySelector("#address-form");
const cepInput = document.getElementById("cep");
const addressInput = document.querySelector("#address");
const cityInput = document.querySelector("#city");
const numberInput = document.querySelector("#number");
const neighborhoodInput = document.querySelector("#neighborhood");
const password = document.getElementById("senha")
const regionInput = document.querySelector("#region");
const formInputs = document.querySelectorAll("[data-input]");
const inputSenha = document.getElementById("senha");
const textError = document.getElementById("showPwmMessage");


//popup

function openModal() {
    document.getElementById("myModal").style.display = "block";
}

function closeModal() {
    document.getElementById("myModal").style.display = "none";
}

//popup


//Event listener pra não deixar o usuario colocar nada além de numeros
cepInput.addEventListener("keypress", (e) => {
    const onlyNumbers = /[0-9]|\./;
    const key = String.fromCharCode(e.keyCode);
    if (!onlyNumbers.test(key)) {
        e.preventDefault();
        return;
    }
});

//senha related eventlisteners
const handleKeyup = (e) => {
    const inputValue = e.target.value;

    if (inputValue.length < 8) {
        textError.textContent = "A senha precisa ter pelo menos 8 dígitos";
        inputSenha.classList.add("red-border");
    } else {
        handleBlur();
    }
};

const handleFocus = (e) => {
    const inputValue = e.target.value;

    if (inputValue.length < 8) {
        textError.textContent = "A senha precisa ter pelo menos 8 dígitos";
        inputSenha.classList.add("red-border");
    }
};

const handleBlur = () => {
    inputSenha.classList.remove("red-border");
    textError.textContent = "";
};

password.addEventListener("keyup", handleKeyup);
password.addEventListener("focus", handleFocus);
password.addEventListener("blur", handleBlur);
//senha related eventlisteners


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
            cepInput.value = "";

            if (!addressInput.hasAttribute("disabled")) {
                toggleDisabled();
            }

            alert("CEP inválido. Por favor, insira um CEP válido.");

            return;
        }

        if (addressInput.value === "") {
            toggleDisabled();
        }

        formInputs.forEach(input => {
            input.classList.add("cep-input-color");
        });

        addressInput.value = data.logradouro;
        cityInput.value = data.localidade;
        neighborhoodInput.value = data.bairro;
        regionInput.value = data.uf;





    } catch (error) {
        console.error("Error fetching CEP:", error);
        alert("Ocorreu um erro ao buscar o CEP. Por favor, tente novamente.");

        formInputs.forEach(input => {
            input.classList.remove("cep-input-color");
        });
    }
}


//itera os inputs da classe formInputs e retira a classe que deixa a borda verde
formInputs.forEach(input => {
    input.addEventListener("focus", () => {

        formInputs.forEach(input => {
            input.classList.remove("cep-input-color");
        });
    });
});

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



