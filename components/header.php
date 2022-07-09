<!DOCTYPE html>
<html lang="en">
	
  <head>
		<title>DB Test</title>
		<meta charset="utf-8" />
		<link 
      rel="stylesheet"  
      type="text/css" 
      href="/dev/TestDB/css/style.css"
    >
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>

	<body>
    <h1>MySQL Database With PHP</h1>
    <hr />
    <h2><?php include_once "includes/ConnectToDb.php" ?></h2>
    <nav>
      <hr />
      <!-- Page -->
      <header>
        <button>
          <a href="/dev/TestDB">Home</a>
        </button>
      </header>
      <hr />
      <!-- Set Up Database -->
      <header>
        <form action="/dev/TestDB/2CreateDatabase.php"> 
          <button type="submit">
            Create Database
          </button>
        </form>
        <form action="/dev/TestDB/3TestDatabase.php"> 
          <button type="submit">
              Test Database
          </button>
        </form>
      </header>
      <hr />
      <!-- Set Up Tables -->
      <header>
        <form action="/dev/TestDB/4CreateTable.php"> 
          <button type="submit">
            Create Table
          </button>
        </form>
      </header>
      <hr />
      <!-- Database CRUD -->
      <header>
        <form action="/dev/TestDB/5InsertData.php"> 
          <button type="submit">
            Insert Data
          </button>
        </form>
        <form action="/dev/TestDB/6RetrieveData.php"> 
          <button type="submit">
            Retrieve Data
          </button>
        </form>        
      </header>
      <hr />
      <!-- Data View -->
      <header>
        <form action="/dev/TestDB/7RetrieveTableData.php"> 
          <button type="submit">
            Retrieve Table Of Data
          </button>
        </form>
      </header>
      <hr />
    </nav>
  </body>
</html>

