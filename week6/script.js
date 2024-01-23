// Configuration Object
const config = {
    apiUrl: 'https://randomuser.me/api/'
};

// User Class
class User {
    constructor(name, email, picture) {
        this.name = name;
        this.email = email;
        this.picture = picture;
    }

    getHtmlRepresentation() {
        return `
            <div>
                <h2>${this.name}</h2>
                <p>${this.email}</p>
                <img src="${this.picture}" alt="User Image">
            </div>
        `;
    }
}

// Function to fetch user data
async function fetchRandomUser() {
    try {
        const response = await fetch(config.apiUrl);
        const data = await response.json();
        const user = data.results[0];
        const newUser = new User(
            `${user.name.first} ${user.name.last}`, 
            user.email, 
            user.picture.large
        );
        displayUser(newUser);
    } catch (error) {
        console.error('Fetching user failed:', error);
    }
}

// Function to update UI
function displayUser(user) {
    const userInfoDiv = document.getElementById('userInfo');
    userInfoDiv.innerHTML = user.getHtmlRepresentation();
}

// Event Listener for Button
document.getElementById('fetchUser').addEventListener('click', fetchRandomUser);

// HTML BOM
window.onload = () => {
    console.log('Window loaded');
};
