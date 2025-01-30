<template>
  <div id="app">
    <header class="banner">
      <h1>nagłówek</h1>
    </header>

    <div class="main-layout">
      <aside class="sidebar sidebar-left">
        <p>lewy banner</p>
      </aside>

      <main class="content">
        <p>srodkowy </p>
      </main>

      <aside class="sidebar sidebar-right">
        <p>prawy</p>
      </aside>
    </div>

    <footer class="footer">
      <p>stopka</p>
    </footer>
  </div>
</template>

<script>
export default {
  name: 'App',
};
</script>

<style>
#app {
  display: flex;
  flex-direction: column;
  min-height: 1000px; 
}

.banner {
  background-color: lightgreen;
  color: white;
  padding: 20px;
  text-align: center;
  font-size: 24px;
}

.main-layout {
  display: flex;
  flex: 1;
  height: 600px; 
}

.sidebar {
  width: 200px; 
  padding: 20px;
  background-color: red;
}
.sidebar-left {
  border-right: 2px solid grey;
}
.sidebar-right {
  border-left: 2px solid grey;
}

.content {
  width: calc(100% - 400px);
  padding: 20px;
  background-color: aqua;
}

.footer {
  background-color: black;
  color: white;
  padding: 10px;
  text-align: center;
  font-size: 16px;
}
</style>