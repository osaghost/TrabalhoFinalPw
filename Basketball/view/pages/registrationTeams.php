<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  
  <hr>
  <h1 class="mt-3 text-center">
    Cadastro de times
  </h1>
  <h5 class="subtitle is-5 text-center">
   <br>
    Por meio deste formulário você pode cadastrar o seu time!
 </h5>
  <hr>
  <section>
       <a href="http://localhost/projetos/Basketball">
           <button class="btn btn-danger" style="--bs-bg-opacity: .1;">Voltar</button>
       </a>
   </section>

   <h2 class="mt-3">Cadastrar Time</h2>

   <main class="box">
   <form  class="formRegisterTeams" action="http://localhost/projetos/Basketball/cadastro" method="POST">
       <fieldset>
           <br>
           <div class="form-group">
               <input type="text" name="name" id="teamName" class="inputUser" required>
               <label for="teamName" class="labelInput">Nome do Time</label>
           </div>
           <br><br>
           <div class="inputBox">
               <input type="text" name="contact" id="contact" class="inputUser" required>
               <label for="contact" class="labelInput">Contato</label>
           </div>
           <br><br>
           <div>
               <input name="modality" list="modality">
               <label for="modality">Modalidade</label>
               <datalist id="modality">
                   <option>3x3</option>
                   <option>Amador</option>
                   <option>Escolinha</option>
                   <option>Equipes de Base</option>
                   <option>Profissional</option>
               </datalist>
           </div>
           <p class="mt-3">Categoria:</p>
               <input type="radio" id="female" name="gender" value="Feminino" required>
               <label for="female">Feminino</label>  
               <br>
               <input type="radio" id="male" name="gender" value="Masculino" required>
               <label for="male">Masculino</label>
               <br>
               <input type="radio" id="other" name="gender" value="Outro" required>
               <label for="other">Outro</label>
           <br><br>
           <div>
               <input name="state" list="state">
               <label for="state">Estado</label>
               <datalist id="state">
                   <option>Acre - AC</option>
                   <option>Alagoas - AL</option>
                   <option>Amapá - AP</option>
                   <option>Amazonas - AM</option>
                   <option>Bahia - BA</option>
                   <option>Ceará - CE</option>
                   <option>Distrito Federal - DF</option>
                   <option>Espírito Santo - ES</option>
                   <option>Goiás - GO</option>
                   <option>Maranhão - MA</option>
                   <option>Mato Grosso - MT</option>
                   <option>Mato Grosso do Sul - MS</option>
                   <option>Minas Gerais - MG</option>
                   <option>Pará - PA</option>
                   <option>Paraíba - PB</option>
                   <option>Paraná - PR</option>
                   <option>Pernambuco - PE</option>
                   <option>Piauí - PI</option>
                   <option>Rio de Janeiro - RJ</option>
                   <option>Rio Grande do Norte - RN</option>
                   <option>Rio Grande do Sul - RS</option>
                   <option>Rondônia - RO</option>
                   <option>Roraima - RR</option>
                   <option>Santa Catarina - SC</option>
                   <option>São Paulo - SP</option>
                   <option>Sergipe - SE</option>
                   <option>Tocantins - TO</option>
               </datalist>
           </div>
           <br><br>
           <div class="inputBox">
               <input type="text" name="city" id="city" class="inputUser" required>
               <label for="city" class="labelInput">Cidade</label>
           </div>
           <br><br>
            <a href="http://localhost/projetos/Basketball">
           <input type="submit" class="btn btn-danger" value="Inserir Time">
            
    
           </a>
       </fieldset>
   </form>
</main>

