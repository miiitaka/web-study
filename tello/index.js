"use strict";

const dgram  = require("dgram");
const socket = dgram.createSocket("udp4");
const tello  = {
  ip: "192.168.10.1",
  port: 8889
};
const send   = async(buffer, ms = 0) => {
  console.log(buffer);
  const command = new Buffer(buffer);
  socket.send(command, 0, command.length, tello.port, tello.ip);
  await wait(ms);
};
const wait   = ms => new Promise(res =>setTimeout(res, ms));
const main   = async() => {
  await send("command", 100);
  await send("takeoff", 4000);
  await send("cw 90", 4000);
  await send("ccw 90", 4000);
  await send("land");
};

main();
