  function run()
  {
    username = document.getElementById("username").value;
    password = document.getElementById("password").value;
    purchase1 = document.getElementById("Beans").value;
    purchase2 = document.getElementById("BakedBeans").value;
    purchase3 = document.getElementById("Goldinfusedbeans").value;

    if (username == "")
    {
      alert("Enter a username");
      return false;
    }
    if (password == "")
    {
      alert("Enter a password");
      return false;
    }
    if (document.getElementById("Free 7 day ").checked == false && document.getElementById("$50.00 over night  ").checked == false  && document.getElementById("$5.00 three day ").checked == false)
    {
      alert("Select a shipping option");
      return false;
    }
    if (purchase1 < 0)
    {
      alert("Error, cannot have negative Beans!");
      return false;
    }
    if (purchase2 < 0)
    {
      alert("Error, cannot have negative Baked Beans!");
      return false;
    }
    if (purchase3 < 0)
    {
      alert("Error, cannot have negative Gold infused beans!");
      return false;
    }

    return true;
  }
