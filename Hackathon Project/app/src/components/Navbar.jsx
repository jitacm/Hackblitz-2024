const Navbar = () => {
  return (
    <nav className="bg-gray-900 p-5">
      <div className="flex items-center justify-between">
        {/* Left side - Logo */}
        <div className="flex items-center text-2xl">
          <p className="text-white font-bold">
            Hood <span className="logo-name ">Hub</span>
          </p>
        </div>
        {/* Right side - Login/Sign Up */}
        <div className="flex items-center">
          <a
            href="#"
            className="text-gray-300 hover:text-white mr-4 text-2xl font-bold"
          >
            Login
          </a>
          <a
            href="#"
            className="bg-orange-signup text-black font-bold py-2 px-4 rounded text-2xl"
          >
            Sign Up
          </a>
        </div>
      </div>
    </nav>
  );
};

export default Navbar;
