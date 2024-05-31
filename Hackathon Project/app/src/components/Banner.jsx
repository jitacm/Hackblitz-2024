import "./Banner.css";
import Image from '../assets/imagesDemo.jpg'

const Banner = () => {
  return (
    <>
      <div className="header">
        <div className="banner-image">
          {/* <img className=""src={Image} alt="" /> */}
        </div>

        <div className="title-banner">
          <h1>
            Hood <span>Hub</span>
          </h1>
          <h4>Support your Local Business</h4>
        </div>

        <form action="" className="search-tool">
          <div className="row">
            <div className="column srch-w-1">
              <label htmlFor="query-1" className="business-type">
                Type of Business
              </label>
              <input 
                type="text"
                name="query-1"
                id="query-1"
                minLength="3"
                color="black"
                className="query-box"
              />
            </div>
</div>

          <div className="search-btn">
            <a href="" className="reset-btn-pointer">
              Reset
            </a>
            <button type="submit" className="sub-btn-pointer">
              Search
            </button>
          </div>   
        </form>
      </div>
    </>
  );
};

export default Banner;
