<template>
    <div>
      <h1>Add Student</h1>
      <form @submit.prevent="submit">
        <input v-model="form.name" placeholder="Name" />
        <input v-model="form.image" placeholder="Image URL" />
        <input v-model="form.age" type="number" placeholder="Age" />
        <select v-model="form.status">
          <option value="active">Active</option>
          <option value="inactive">Inactive</option>
        </select>
        <button type="submit">Save</button>
      </form>
    </div>
  </template>
  
  <script>
  import { useForm } from '@inertiajs/inertia-vue3';
  
  export default {
    setup() {
      const form = useForm({
        name: '',
        image: '',
        age: '',
        status: 'active',
      });
  
      const submit = () => {
        form.post(route('students.store'));
      };
  
      return { form, submit };
    },
  };
  </script>
  