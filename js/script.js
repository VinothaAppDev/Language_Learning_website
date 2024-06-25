const wrapper = document.querySelector('.wrapper');
const registerLink = document.querySelector('.register-link');
const loginLink =document.querySelector('.login-link');
const btnPopup =document.querySelector('.btnLogin-popup');
const iconClose =document.querySelector('.icon-close');

function setupDropdownRedirect() {
    var dropdown = document.getElementById("redirectDropdown");
    var selectedValue = dropdown.value;
    if (selectedValue !== "") {
        var redirectURL = selectedValue;
        window.location.href = redirectURL;
    }
}
    

registerLink.onclick = () => {
    wrapper.classList.add('active');
};

loginLink.onclick = () => {
    wrapper.classList.remove('active');
};

btnPopup.onclick = () => {
    wrapper.classList.add('active-popup');
};

iconClose.onclick = () => {
    wrapper.classList.remove('active-popup');
    wrapper.classList.remove('active');
};

const redirectButton = document.getElementById('redirectButton');

        redirectButton.addEventListener('click', () => {
            const dropdown1Value = document.getElementById('dropdown1').value;
            const dropdown2Value = document.getElementById('dropdown2').value;

            let redirectTo = `../${dropdown1Value}/${dropdown2Value}.html`;

            // Redirect the page
            if (redirectTo) {
                window.location.href = redirectTo;
            } else {
                alert('No redirection rule defined for the selected options.');
            }
        });