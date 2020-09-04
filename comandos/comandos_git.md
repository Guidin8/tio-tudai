


## git init --> inicia git en la carpeta donde estoy parado

## git config --global user.name "nombre" --> establece el nombre de usuario

## git config --global user.email  --> establece el mail asociado al usuario

## git config –l o git config --list  --> muestra el listado de las configuraciones

## git clone "https://github.com/fdcrespi/Peluqueria-de-aves" --> clona en pc el repositorio de github

## git status --> consulta el estado del repositorio

## git add "nombre archivo" --> pone el archivo en seguimiento o preparacion (git add . pone todos los archivos)

## git commit -m "comentario" --> confirma cambios del archivo

## git log --> muestra todos las versiones del archivo

### PARA CREAR REPOSITORIO DESDE CONSOLA


git add README.md (crea archivo)
git commit -m "first commit"
git branch -M master
git remote add origin https://github.com/Guidin8/ver.git
git push -u origin master

########################################################



## git remote add origin https://github.com/user/repo.git → sube el archivo a github confirmado

## git branch –u origin/master → sube el archivo pero sin condirmaciones (sirve para las ramas tambien)

## git push –u origin master → sube los cambios a github sin confirmacion ? (sirve para las ramas tambien)


## git pull → actualiza archivo local con lo que hay en github

## git remote → muestra un listado de los repositorios remotos

## git remote add [nombre] [url] → agrega repositorio remoto

## git remote rm [nombre] → elimina repositorio remoto

## git branch → muestra ramas locales

## git push [nombre-remoto] [rama] → sube confirmaciones a repositorio remoto

## git pull [nombre-remoto] [rama] → actualiza repositorio remoto

## git branch [rama] → crea nueva rama

## git checkout [rama] → me posiciono en la rama que desee

## git branch -d [rama] → borra la rama (con-U fuerza el borrado)

## git merge [rama] → fusiona el contenido de rama, en la rama en que estamos parados

## git branch -vv → lista las vinculaciones de ramas locales con las remotas

## git branch --set-upstream-to origin/[rama] → se vincula rama  
