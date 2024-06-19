<template>
    <div>
      <h1>Edit Student</h1>
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
    props: ['student'],
    setup(props) {
      const form = useForm({
        name: props.student.name,
        image: props.student.image,
        age: props.student.age,
        status: props.student.status,
      });
  
      const submit = () => {
        form.put(route('students.update', props.student.id));
      };
  
      return { form, submit };
    },
  };
  </script>
  