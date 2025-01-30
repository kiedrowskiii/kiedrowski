<template>
  <div id="app">
    <h1>Counter</h1>
    <div class="counter-container">
      <div v-for="(counter, index) in counters" :key="index" class="counter-item">
        <button @click="increment(index)">Counter {{ index + 1 }}: {{ counter }}</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      counters: Array(20).fill(0),
    };
  },
  methods: {
    increment(index) {
      this.counters[index]++;
    },
  },
};
</script>

<style>
template

.counter-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 10px;
}

.counter-item {
  margin: 10px;
}

button {
  padding: 10px 20px;
  font-size: 16px;
  border: 1px solid aqua;
  border-radius: 8px;
  background-color: blueviolet;
  cursor: pointer;
  transition: background-color 0.3s;
}
</style>
