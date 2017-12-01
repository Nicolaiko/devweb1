  $(function(){
    $("#form-test").on("submit",function(){
      nome_input = $("input[name='nome']");

      if(nome_input.val() == "" || nome_input.val() == null)
      {
        $("#erro-nome").html("campo obrigatorio");
        return(false);
      }

      return(true);
    });
});

  $(function(){
    $("#form-test").on("submit",function(){
      email_input = $("input[name='email']");

      if(email_input.val() == "" || email_input.val() == null)
      {
        $("#erro-email").html("campo obrigatorio");
        return(false);
      }

      return(true);
    });
});

  $(function(){
    $("#form-test").on("submit",function(){
      data_input = $("input[name='data']");

      if(data_input.val() == "" || data_input.val() == null)
      {
        $("#erro-data").html("campo obrigatoria");
        return(false);
      }

      return(true);
    });
});

  $(function(){
    $("#form-test").on("submit",function(){
      pass_input = $("input[name='pass']");

      if(pass_input.val() == "" || pass_input.val() == null)
      {
        $("#erro-pass").html("campo obrigatorio");
        return(false);
      }

      return(true);
    });
});

  $(function(){
    $("#form-test").on("submit",function(){
      repass_input = $("input[name='repass']");

      if(repass_input.val() == "" || repass_input.val() == null)
      {
        $("#erro_repassword").html("campo obrigatorio");
        return(false);
      }

      return(true);
    });
});

  $(function(){
    $("#form-test").on("submit",function(){
      upload_input = $("input[name='upload']");

      if(upload_input.val() == "" || upload_input.val() == null)
      {
        $("#erro_upload").html("campo obrigatorio");
        return(false);
      }

      return(true);
    });
});
