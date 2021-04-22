<template>
  <div>
    <div class="wrapper">
      <div class="header">
        <div class="header-menu">
          <div class="title">Coding<span> Snow </span></div>
          <div @click="toggleClass()" class="sidebar-btn">
            <b-icon rotate="90" icon="bar-chart-fill"></b-icon>
          </div>
          <ul>
            <li>
              <a href="#"><b-icon icon="search"></b-icon></a>
            </li>
            <li>
              <a href="#"><b-icon icon="bell"></b-icon></a>
            </li>
            <li>
              <a href="#"><b-icon icon="power"></b-icon></a>
            </li>
          </ul>
        </div>
      </div>
      <div v-bind:class="[isActive ? 'on' : 'off']" class="sidebar">
        <div class="sidebar-menu">
          <center class="profile">
            <img src="https://picsum.photos/500/500/?image=54" alt="" />
            <p>Nome imagem</p>
          </center>
          <li class="item">
            <a href="#" class="menu-btn">
              <i> <b-icon icon="laptop"></b-icon></i><span>Dashboard</span>
            </a>
          </li>
          <li class="item" id="profile">
            <a href="#profile" class="menu-btn">
              <i> <b-icon icon="person-circle"></b-icon></i
              ><span
                >Profile<i class="drop-down">
                  <b-icon icon="chevron-double-down"></b-icon></i
              ></span>
            </a>
            <div class="sub-menu">
              <a href="#" class="menu-btn">
                <i><b-icon icon="card-image"></b-icon></i
                ><span>Picture<i></i></span>
              </a>
              <a href="#" class="menu-btn">
                <i><b-icon icon="person-lines-fill"></b-icon></i
                ><span>Info<i></i></span>
              </a>
            </div>
          </li>
          <li class="item" id="messages">
            <a href="#messages" class="menu-btn">
              <i> <b-icon icon="envelope"></b-icon></i
              ><span
                >Messages<i class="drop-down">
                  <b-icon icon="chevron-double-down"></b-icon></i
              ></span>
            </a>
            <div class="sub-menu">
              <a href="#" class="menu-btn">
                <i><b-icon icon="envelope"></b-icon></i><span>New<i></i></span>
              </a>
              <a href="#" class="menu-btn">
                <i><b-icon icon="envelope-fill"></b-icon></i
                ><span>Sent<i></i></span>
              </a>
              <a href="#" class="menu-btn">
                <i><b-icon icon="exclamation-circle"></b-icon></i
                ><span>Span<i></i></span>
              </a>
            </div>
          </li>
          <li class="item" id="settings">
            <a href="#settings" class="menu-btn">
              <i> <b-icon icon="gear"></b-icon></i
              ><span
                >Settings<i class="drop-down">
                  <b-icon icon="chevron-double-down"></b-icon></i
              ></span>
            </a>
            <div class="sub-menu">
              <a href="#" class="menu-btn">
                <i><b-icon icon="lock"></b-icon></i><span>Password<i></i></span>
              </a>
              <a href="#" class="menu-btn">
                <i><b-icon icon="layout-wtf"></b-icon></i
                ><span>Language<i></i></span>
              </a>
            </div>
          </li>
          <li class="item">
            <a href="#" class="menu-btn">
              <i> <b-icon icon="info-circle"></b-icon></i><span>About</span>
            </a>
          </li>
        </div>
      </div>
      <div v-bind:class="[isActive ? 'on' : 'off']" class="main-container"></div>
    </div>
  </div>
</template>

<script>
export default {
  name: "SideBarComponent",
  data() {
    return {
      isActive: true,
    };
  },
  methods: {
    toggleClass: function (event) {
      this.isActive = !this.isActive;
    },
  },
};
</script>

<style>
* {
  margin: 0;
  padding: 0;
  list-style: none;
  text-decoration: none;
  box-sizing: border-box;
  font-family: "Roboto", sans-serif;
}

body {
  background: #fff;
}

.wrapper .header {
  z-index: 1;
  background: #22242a;
  position: fixed;
  width: calc(100% - 0%);
  height: 70px;
  display: flex;
  top: 0;
}

.wrapper .header .header-menu {
  width: calc(100% - 0%);
  height: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 20px;
}

.wrapper .header .header-menu .title {
  color: #fff;
  font-size: 25px;
  text-transform: uppercase;
  font-weight: 900;
}

.wrapper .header .header-menu .title span {
  color: #4ccee8;
}

.wrapper .header .header-menu .sidebar-btn {
  color: #fff;
  position: absolute;
  margin-left: 240px;
  font-size: 22px;
  font-weight: 900;
  cursor: pointer;
  transition: 0.3s;
  transition-property: color;
}

.wrapper .header .header-menu .sidebar-btn:hover {
  color: #4ccee8;
}

.wrapper .header .header-menu ul {
  display: flex;
}

.wrapper .header .header-menu ul li a {
  background: #fff;
  color: #000;
  display: block;
  margin: 0 10px;
  font-size: 18px;
  width: 34px;
  height: 34px;
  line-height: 35px;
  text-align: center;
  border-radius: 50%;
  transition: 0.3s;
  transition-property: background, color;
}

.wrapper .header .header-menu ul li a:hover {
  background: #4ccee8;
  color: #fff;
}

.wrapper .sidebar {
  z-index: 1;
  background: #2f323a;
  position: fixed;
  top: 70px;
  width: 250px;
  height: calc(100% - 0%);
  transition: 0.3s;
  transition-property: width;
  overflow-y: auto;
}

.wrapper .sidebar .sidebar-menu {
  overflow: hidden;
}

.wrapper .sidebar .sidebar-menu .profile img {
  margin: 20px 0;
  width: 50%;
  height: 50%;
  border-radius: 50%;
}

.wrapper .sidebar .sidebar-menu .profile p {
  color: #bbb;
  font-weight: 700;
  margin-bottom: 10px;
}

.wrapper .sidebar .sidebar-menu .item {
  width: 250px;
  overflow: hidden;
}

.wrapper .sidebar .sidebar-menu .item .menu-btn {
  display: block;
  color: #fff;
  position: relative;
  padding: 25px 20px;
  transition: 0.3s;
  transition-property: color;
}

.wrapper .sidebar .sidebar-menu .item .menu-btn:hover {
  color: #4ccee8;
}

.wrapper .sidebar .sidebar-menu .item .menu-btn i {
  margin-right: 20px;
}

.wrapper .sidebar .sidebar-menu .item .menu-btn .drop-down {
  float: right;
  font-size: 12px;
  margin-top: 3px;
}

.wrapper .sidebar .sidebar-menu .item .sub-menu {
  background: #3498db;
  overflow: hidden;
  max-height: 0;
  transition: 0.3s;
  transition-property: background, max-height;
}

.wrapper .sidebar .sidebar-menu .item .sub-menu a {
  display: block;
  position: relative;
  color: #fff;
  white-space: nowrap;
  font-size: 15px;
  padding: 20px;
  border-bottom: 1px solid #8fc5e9;
  transition: 0.3s;
  transition-property: background;
}

.wrapper .sidebar .sidebar-menu .item .sub-menu a:hover {
  background: #55b1f0;
  color: black;
}

.wrapper .sidebar .sidebar-menu .item .sub-menu i {
  padding-right: 20px;
  font-size: 10px;
}

.wrapper .sidebar .sidebar-menu .item:target .sub-menu {
  max-height: 500px;
}

.wrapper .main-container.on {
  width: (100% - 250px);
  margin-top: 70px;
  margin-left: 250px;
  padding: 15px;
  background: chocolate;
  background-size: cover;
  height: 100vh;
  transition: 0.3s;
}

.wrapper .btnToogle {
  background: #22242a;
  border: none;
}

.wrapper .sidebar.off {
  width: 70px;
}

.wrapper .sidebar.off .profile p,
.wrapper .sidebar.off a span {
  display: none;
}

.wrapper .sidebar.off .profile img{
  width: 40px;
}

.wrapper .sidebar.off .sidebar-menu .item .menu-btn {
  font-size: 23px;
}

.wrapper .sidebar.off .sidebar-menu .item .sub-menu i {
  font-size: 18px;
  padding-left: 3px;
}

.main-container.off{
  margin-top: 70px;
  margin-left: 250px;
  padding: 15px;
  background: chocolate;
  background-size: cover;
  height: 100vh;
  transition: 0.3s;
  width: (100% - 70px);
  margin-left: 70px;
}

</style>
