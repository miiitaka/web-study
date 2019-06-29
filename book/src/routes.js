import React from "react";
import DefaultLayout from "./containers/DefaultLayout";
import Loadable from "react-loadable";
import Loading from "./components/Loading";

const Home = Loadable({
  loader: () => import("./views/Home"),
  loading: Loading
});

const Login = Loadable({
  loader: () => import("./views/Login"),
  loading: Loading
});

const routes = [
  {
    path: "/",
    exact: true,
    name: "DefaultLayout",
    component: DefaultLayout
  },
  {
    path: "/home",
    exact: true,
    name: "home",
    component: Home,
    helmet: {
      title: "本棚",
      description: "図書管理システム"
    }
  },
  {
    path: "/login",
    exact: true,
    name: "login",
    component: Login
  }
];

export default routes;