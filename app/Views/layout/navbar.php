<!--==================== HEADER ====================-->
<header class="header" id="header">
      <div class="navbar">
        <div class="navbar-container">
          <div class="logo-container">
            <h1 class="logo">
              <img
                src="https://github.com/adecahyaaa/Pemrograman-Web-V/blob/main/logo.png?raw=true"
                alt="logo"
              />
            </h1>
          </div>
          <div class="menu-container">
            <ul class="menu-list">
              <li class="menu-list-item">Home</li>
              <li class="menu-list-item"><a href="/view/jokes">Jokes</a></li>
              <li class="menu-list-item"><a href="gombal.html">Gombal</a></li>
              <li class="menu-list-item">Quotes</li>
            </ul>
          </div>
          <div class="love-container">
            <img
              class="love-picture"
              src="https://github.com/adecahyaaa/Pemrograman-Web-V/blob/main/icon-park-outline_like.png?raw=true"
              alt="love"
            />
          </div>
        </div>
      </div>
    </header>

    <style>
                
        .navbar {
            width: 100%;
            height: 75px;
            background-color: #f1f0f0;
            position: sticky;
            top: 0;
        }
        
        .navbar-container {
            display: flex;
            align-items: center;
            padding: 0 50px;
            height: 100%;
            color: black;
            font-family: "Sen", sans-serif;
        }
        
        .logo-container {
            flex: 1;
        }
        
        .logo {
            font-size: 30px;
            color: #4dbf00;
        }
        .logo img{
            width: 100px;
            margin-top: 42px;
        }
                
        .menu-container {
            flex: 6;
        }
        
        .menu-list {
            display: flex;
            list-style: none;
        }
        
        .menu-list-item {
            margin-right: 30px;
            margin-top: 20px;
        }
        
        .menu-list-item.active {
            font-weight: bold;
        }

        .love-container {
            flex: 2;
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }
        
        .love-text-container {
            margin: 0 20px;
        }
        
        .love-picture {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            object-fit: cover;
            margin-left: 1250px;

        }

    </style>