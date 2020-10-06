import React from "react";

const Something = ({ action, reactAction }) => {
    return (
        <div>
            <div
                className="btn btn-primary p-10 m-3"
                onClick={() => reactAction()}
            >
                {action}
            </div>
        </div>
    );
};

export default Something;
