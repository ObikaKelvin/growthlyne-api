import Form from "./form";
import lozad from "lozad";
import images from './Images';


const form = new Form();

/**
 * Form Object.
 *
 * @var object|Form
 * @since 1.0.0
 */
form.init();

const observer = lozad(); // lazy loads elements with default selector as '.lozad'
observer.observe();

console.log(images)
