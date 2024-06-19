<template>
    <div>
      <h1>Students</h1>
      <router-link :to="{ name: 'students.create' }">Add Student</router-link>
      <ul>
        <li v-for="student in students" :key="student.id">
          {{ student.name }} - {{ student.age }} - {{ student.status }}
          <router-link :to="{ name: 'students.edit', params: { id: student.id } }">Edit</router-link>
          <form @submit.prevent="deleteStudent(student.id)">
            <button type="submit">Delete</button>
          </form>
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    props: ['students'],
    methods: {
      async deleteStudent(id) {
        await this.$inertia.delete(route('students.destroy', id));
      },
    },
  };
  </script>
  