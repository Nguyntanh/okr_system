import React from "react";
import { createRoot } from "react-dom/client";
import TailadminApp from "./tailadmin/TailadminApp";

const root = createRoot(document.getElementById("react-app")!);
root.render(<TailadminApp />);
