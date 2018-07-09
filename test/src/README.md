1. Ajax 异步访问
```javascript
var xhr = new XMLHttpRequest();

xhr.onreadystatechange = function(){}

xhr.open()

xhr.send()
```
2. Ajax 异步访问的 url(api)，用 php 语法。
    1. php 是后端语言
    2. php 的环境搭建： IIS、PHPManagerForIIS、vs2015
    3. mysql

3. 注册
    1. register.php
    ```php
        $username = $_POST["username"];
        $pwd = $_POST["pwd"];
        $sql = "insert into users(username, password) value('$username', '$pwd')";
        $conn = new mysqli(server, account, password, dbname);
        $conn->query($sql);
        while(){}
        ehco json_encode(array)
    ```
    2. login.html
    ```javascript
        $.ajax({
            url: 'register.php'
        })
    ```
4. 登录
    1. login.php
    ```php
        session_start();
        $sql = "select * from users where username = '$username' and password = '$pwd'";
        $conn->query($sql);
        if(count($result) > 0){
            登录成功
            $_SESSION["user"] = $username;
        }
    ```
    2. login.html
    ```javascript
        $.ajax({
            url: 'login.php',
            success: function(){
                window.location.href = 'index.php';
            }
        })
    ```
5. 主页面
    1. index.php 判断是否有登录状态
    ```php
        session_start();
        if(isset($_SESSION['user']))
        header("Location: login.html")
    ```
    2. 登录状态有效的情况下，去请求学生信息 students.php
    ```php
        $sql = "select * from students";
    ```
6. 退出登录
    1. logout.php
    ```php
        unset($_SESSION['user'])
        header("Location: login.html")
    ```