document.getElementById("oil-collection-form").addEventListener("submit", async function(event) {
  event.preventDefault();

  const amountInput = document.getElementById("amount");
  const amountValue = parseInt(amountInput.value);

  if (amountValue <= 0 || amountValue === -1) {
    showError("A quantidade de óleo deve ser maior que zero.");
    return;
  }

  const cepInput = document.getElementById("cep").value.replace(/\D/g, '');
  if (cepInput.length === 8) {
    const address = await getAddressByCep(cepInput);
    if (address) {
      document.getElementById("rua").value = address.rua;
      document.getElementById("numero").value = "";
      document.getElementById("cidade").value = address.cidade;
      document.getElementById("estado").value = address.estado;
    }
  }

  // Simulate sending data to a server (non-functional as there's no backend)
  // Here you can add code to send the data to a real backend server.

  // Display success message
  showSuccessMessage();
});

async function getAddressByCep(cep) {
  try {
    const response = await fetch(`https://viacep.com.br/ws/${cep}/json/`);
    if (response.ok) {
      const data = await response.json();
      return {
        rua: data.logradouro,
        cidade: data.localidade,
        estado: data.uf
      };
    } else {
      console.error("Erro ao buscar CEP:", response.status);
      return null;
    }
  } catch (error) {
    console.error("Erro na requisição:", error);
    return null;
  }
}

function showError(message) {
  const errorDiv = document.getElementById("error-message");
  errorDiv.textContent = message;
  errorDiv.classList.remove("d-none");
}

function showSuccessMessage() {
  document.getElementById("success-message").classList.remove("d-none");
}
