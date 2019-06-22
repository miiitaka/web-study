import React from "react";
import DefaultLayout from "./containers/DefaultLayout";
import Loadable from "react-loadable";

const Login = Loadable({
  loader: () => import("./views/Login")
});

const routes = [
  {
    path: "/",
    exact: true,
    name: "DefaultLayout",
    component: DefaultLayout
  },
  {
    path: "/login",
    exact: true,
    name: "login",
    component: Login
  }
];

export default routes;