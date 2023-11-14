let darkMode = localStorage.getItem('darkMode');
const darkModeToggle = document.querySelector('#dark-mode-toggle');

//checar se o modo noturno está ativado
//se estiver, desativar
//senão estiver, ativar

const enableDarkmode = () => {
    //add a classe darkmode
    document.body.classList.add('darkmode');
    //att darkmode no armazenamento local(localStorage)
    localStorage.setItem('darkMode', 'enabled');
};

const disableDarkmode = () => {
    //remover a classe darkmode 
    document.body.classList.remove('darkmode');
    //att darkmode no armazenamento local(localStorage)
    localStorage.setItem('darkMode', null);
};

//manter o modo escolhido, mesmo ao atualizar a pagina
if (darkMode === 'enabled') {
    enableDarkmode();
}

darkModeToggle.addEventListener('click', () => {
    darkMode = localStorage.getItem("darkMode");
 
   //se estiver, desativar
    if (darkMode !== "enabled") {
    enableDarkmode();
   } 
   //senão estiver, ativar
   else {
    disableDarkmode();
   }
});